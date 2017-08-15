//
//  LBABKSingle.m
//  LBAiBoKe
//
//  Created by liubo on 2017/8/16.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBABKSingle.h"

@implementation LBABKSingle{
    AFHTTPSessionManager *_sessionManager;
}

+(LBABKSingle *)shareInstance
{
    static LBABKSingle *shareInstance;
    static dispatch_once_t onceToken;
    dispatch_once(&onceToken,^{
        shareInstance = [[self alloc] init];
    });
    return shareInstance;
}
- (instancetype)init
{
    self = [super init];
    if (self) {
        [self reachability];
        [self setShareInstance];
    }
    return self;
}
#pragma mark -- 网络监听
- (void)reachability
{
    [[AFNetworkReachabilityManager sharedManager] setReachabilityStatusChangeBlock:^(AFNetworkReachabilityStatus status) {
    }];
    [[AFNetworkReachabilityManager sharedManager] startMonitoring];
}
- (void)setShareInstance
{
    //设置请求头参数
    _sessionManager = [AFHTTPSessionManager manager];
    _sessionManager.securityPolicy = [AFSecurityPolicy policyWithPinningMode:AFSSLPinningModeNone];
    _sessionManager.requestSerializer.timeoutInterval = 20;
    _sessionManager.requestSerializer = [AFHTTPRequestSerializer serializer];
    _sessionManager.responseSerializer = [AFJSONResponseSerializer serializer];
    [_sessionManager.requestSerializer setValue:@"application/json" forHTTPHeaderField:@"Accept"];
}
#pragma mark 数据请求封装
-(void)postWithUrl:(NSString *)url parameters:(NSDictionary *)parameters withBlock:(void (^)(NSDictionary *, NSError *))block
{
    [_sessionManager POST:url parameters:parameters progress:^(NSProgress * _Nonnull uploadProgress) {
        LBABKLog(@"成功");
    } success:^(NSURLSessionDataTask * _Nonnull task, id  _Nullable responseObject) {
            block(responseObject,nil);
            LBABKLog(@"请求成功");
    } failure:^(NSURLSessionDataTask * _Nullable task, NSError * _Nonnull error) {
        LBABKLog(@"%@", task);
        LBABKLog(@"error:%@", error);
        block(nil,error);
    }];
}

@end
