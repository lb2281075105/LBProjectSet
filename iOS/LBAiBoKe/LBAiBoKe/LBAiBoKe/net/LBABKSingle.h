//
//  LBABKSingle.h
//  LBAiBoKe
//
//  Created by liubo on 2017/8/16.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import <AFNetworking/AFNetworking.h>

@interface LBABKSingle : AFHTTPSessionManager
+ (LBABKSingle *)shareInstance;
-(void)postWithUrl:(NSString *)url parameters:(NSDictionary *)parameters withBlock:(void (^)(NSDictionary *, NSError *))block;
@end
