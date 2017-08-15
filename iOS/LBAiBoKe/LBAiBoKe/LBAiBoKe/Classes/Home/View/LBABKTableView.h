//
//  LBABKTableView.h
//  LBAiBoKe
//
//  Created by liubo on 2017/8/15.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface LBABKTableView : UITableView<UITableViewDelegate,UITableViewDataSource>
/// 数据
@property (nonatomic, strong) NSMutableArray *dataArray;
@end
